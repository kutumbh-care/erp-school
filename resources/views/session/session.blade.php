 @include('common.header');
 @include('common.navbar');

 <script>
window.scrollTo(0, 0);
</script>
    <section class="content-header">
      <h1>
         Session Management
        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
              <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-money"></i>Add Session</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">

		   <a href="javascript:get_content('session/add_session')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Session</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="javascript:get_content('session/add_session')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


        <a href="javascript:get_content('session/move_student')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Move Student</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="javascript:get_content('session/move_student')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		</div>
      </div>
	 <!-- <div <div class="box box-success" >-->
		<!--<div class="box-header with-border">-->

		<!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
		<!--</div>-->
		<!--<div class="box-body">-->




		<!--</div>-->
	 <!-- </div>-->
	 <!-- <div <div class="box box-success" >-->
		<!--<div class="box-header with-border">-->

		<!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
		<!--</div>-->
		<!--<div class="box-body">-->



		<!--<a href="../../../school_software_v1_old/userhelp/Session_english.pdf" target="_blank">-->
		<!--			<div class="col-lg-3 col-xs-6">-->
		<!--				<div class="small-box" style="background-color:red;">-->
		<!--					<div class="inner"><br>-->
		<!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>-->
		<!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
		<!--				</div>-->
		<!--				<div class="icon">-->
		<!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
		<!--				</div>-->
		<!--					<a href="../../../school_software_v1_old/userhelp/Session_english.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			</a>-->


		<!--			<a href="../../../school_software_v1_old/userhelp/Session_hindi.pdf" target="_blank">-->
		<!--			<div class="col-lg-3 col-xs-6">-->
		<!--				<div class="small-box" style="background-color:red;">-->
		<!--					<div class="inner"><br>-->
		<!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>-->
		<!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
		<!--				</div>-->
		<!--				<div class="icon">-->
		<!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
		<!--				</div>-->
		<!--					<a href="../../../school_software_v1_old/userhelp/Session_hindi.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			</a>-->


		<!--</div>-->
	 <!-- </div>-->
    </section>
 @include('common.footer');
