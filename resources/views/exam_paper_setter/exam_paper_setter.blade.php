    <!-- Content Header (Page header) -->
    @include('common.header');
    @include('common.navbar');
    <section class="content-header">
      <h1>
       Paper Setter Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Exam Paper Setter</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  <a href="javascript:get_content('exam_paper_setter/add_question')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Add Question</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
             <a href="javascript:get_content('exam_paper_setter/add_question')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			 <a href="javascript:get_content('exam_paper_setter/view_question')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">View Queston</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
             <a href="javascript:get_content('exam_paper_setter/view_question')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 		<a href="javascript:get_content('exam_paper_setter/instant_go_to_paper_setter')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B3B6D">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Instant Paper</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
             <a href="javascript:get_content('exam_paper_setter/instant_go_to_paper_setter')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			 <a href="javascript:get_content('exam_paper_setter/go_to_paper_setter')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Set Paper</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
             <a href="javascript:get_content('exam_paper_setter/go_to_paper_setter')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 		<a href="javascript:get_content('exam_paper_setter/total_paper_list')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#C46210">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Paper List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
           <a href="javascript:get_content('exam_paper_setter/total_paper_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
      </div>
    </section>
    @include('common.footer');
