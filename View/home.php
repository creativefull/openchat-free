<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
	Dashboard
	<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-8">
			<div class="box box-success">
				<div class="box-header">
					<i class="fa fa-comments-o"></i>
					<h3 class="box-title">Chat</h3>
				</div>
				<div class="box-body chat" id="chat-box" style="overflow-y:auto; height:300px">
				</div>
			</div>
			<!-- /.chat -->
			<div class="box-footer">
				<form id="formChat">
					<div class="col-md-4">
						<div class="form-group">
							<input class="form-control" placeholder="Name" id="name">
						</div>
					</div>
					<div class="col-md-8">
						<div class="input-group">
							<input class="form-control" placeholder="Type message..." id="msg">

							<div class="input-group-btn">
								<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
<script>
	Notification.requestPermission();

	var socket = io("http://server-muzaki.rhcloud.com");
	// var socket = io("http://localhost:8080");
	var uniqueID = "ID-"+(new Date()).getTime().toString();
	localStorage.id = uniqueID;
	socket.emit("new user", { id : uniqueID });

	socket.on("show message", function(data) {
		console.log(data);
		if (data.id == localStorage.id) {
			$("#chat-box").html("");
			data.data.forEach(function(doc) {
				var image = doc.img || "Public/themes/AdminLTE/dist/img/user2-160x160.jpg";
				var element = "<div class=\"item\" tabindex=\"0\"><img src=\"" + image + "\" alt=\"user image\" class=\"online\"><p class=\"message\"><a href=\"#\" class=\"name\"><small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> " + doc.time + "</small>" + doc.name + "</a> <p class=\"pesan\">" + doc.msg + "</p></p></div>";
				element = $(element).find(".pesan").text("Ngonok");
				console.log(element);
				$("#chat-box").append(element);
			})
		}
	})

	$("#formChat").submit(function() {
		var name = $("#name").val();
		var msg = $("#msg").val();

		if (name == "" || msg == "") {
			alert("Field can\'t be empty");
		}
		else {
			$("#name").attr("disabled");
			socket.emit("send message", {
				sender : localStorage.id || 0,
				name : name,
				msg : msg
			});
			$("#msg").val("");
			// $("#msg").focus();
		}
		return false;
	});

	socket.on('receive message', function(data) {
		var image = data.img || "Public/themes/AdminLTE/dist/img/user2-160x160.jpg";
		var element = "<div class=\"item\" tabindex=\"0\"><img src=\"" + image + "\" alt=\"user image\" class=\"online\"><p class=\"message\"><a href=\"#\" class=\"name\"><small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> " + data.time + "</small>" + data.name + "</a> <span class=\"pesan\"></span></p></div>";
		$("#chat-box").append(element);
		$("#chat-box .item .pesan").last().text(data.msg);

		if($("#msg").is(":focus")) {
			$(".item").focus();
			setTimeout(function() {
				$("#msg").focus();
			})
		}
	})

	socket.on('notification', function(data) {
		if (data.sender != localStorage.id) {
			new Notification(data.title, {
				body : data.body,
				icon : data.icon
			})
		}
	})
</script>
