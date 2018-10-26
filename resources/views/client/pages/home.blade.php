
@extends('client.master')
@section('content')

<!-- About Section -->
<section id="about" class="about-section section-padding">
  <div class="container">
    <h2 class="section-title wow fadeInUp">Giới Thiệu</h2>

    <div class="row">

      <div class="col-md-4 col-md-push-8">
        <div class="biography">
          <div class="myphoto">
            <img src="{{ url('public/client/assets/images/avatar.jpg')}}" alt="">
          </div>
          <ul>
            <li><strong>Họ tên:</strong> Nguyễn Công Chí </li>
            <li><strong>Ngày sinh:</strong> 23 07 1997</li>
            <li><strong>Địa chỉ:</strong> 29/34 Đoàn Trần Nghiệp - Nha Trang</li>
            <li><strong>Quốc tịch:</strong> Việt Nam</li>
            <li><strong>Điện Thoại:</strong> 01222424097 </li>
            <li><strong>Email:</strong> ncchi1997@gmail.com</li>
          </ul>
        </div>
      </div> <!-- col-md-4 -->

      <div class="col-md-8 col-md-pull-4">
        <div class="short-info wow fadeInUp">
          <h3>Mục Tiêu Nghề Nghiệp</h3>
          <p>Nhiều cơ hội để làm việc để hoàn thiện kỹ năng chuyên ngành của bản thân. Cũng như tham gia vào một công ty tổ chức chuyên nghiệp để học hỏi những công nghệ tiên tiến nhất , và nâng cao kỹ năng mềm của bản thân . Áp dụng nhiều kiến thức của bản thân để tạo ra những sản phẩm tuyệt vời cho khách hàng,Đối với tôi làm việc với cái tâm nghề nghiệp.   </p>
        </div>

        <div class="short-info wow fadeInUp">
          <h3>Những gì tôi có thể làm </h3>
          <p>Tôi có kinh nghiệm làm việc với nhưng công nghệ mới nhất hiện tại trong thế giới website như : Html , Css , Jquery , và Laravel . Tôi yêu thích việc tạo ra những sản phẩm chất lượng cho khách hàng và trải nghiệm của người dùng website. Tôi nghĩ là tôi có thể làm nhiều thứ mà bạn nghĩ là tôi sẽ không bao giờ làm được .</p>

          <ul class="list-check">
            <li>Website doanh nghiệp</li>
            <li>Landing page</li>
            <li>Website bán hàng trực tuyến</li>
            <li>Giới thiệu bản thân</li>
            <li>Website Education </li>
            <li>App Website</li>
          </ul>
        </div>

        <div class="my-signature">
          <img src="{{ url('public/client/assets/images/sign.png') }}" alt="">
        </div>

        <div class="download-button">
          <a class="btn btn-info btn-lg" href="#contact"><i class="fa fa-paper-plane"></i>Gửi tin nhắn cho tôi</a>
          <a class="btn btn-primary btn-lg" href="#"><i class="fa fa-download"></i>download Cv của tôi</a>
        </div>
      </div>


    </div> <!-- /.row -->
  </div> <!-- /.container -->
</section><!-- End About Section -->


<!-- Video Section -->
<section id="video" class="video-section">
  <div class="tf-bg-overlay">

    <div class="container">

      <div class="video-intro">
       <a class="popup-video" href="https://www.youtube.com/watch?v=LGOjcu0HRec"> <i class="fa fa-play"></i>  </a>
       <h2>Video Giới Thiệu</h2>
     </div>

   </div>

   <!--/.container-->
 </div>
 <!--/.overlay-->
</section>
<!-- /.Video Section -->


<!-- Resume Section -->
<section id="resume" class="resume-section section-padding">
  <div class="container">
    <h2 class="section-title wow fadeInUp">Tóm Tắt</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="resume-title">
          <h3>Học Vấn</h3>
        </div>
        <div class="resume">
          <ul class="timeline">
          @foreach($data_edu as $iteam_edu)
          <li>
            <div class="posted-date">
              <span class="month">{{ $iteam_edu->start }}-{{ $iteam_edu->end }}</span>
            </div><!-- /posted-date -->

            <div class="timeline-panel wow fadeInUp">
              <div class="timeline-content">
                <div class="timeline-heading">
                  <h3>{{ $iteam_edu->name_school }}</h3>
                  <span>{{ $iteam_edu->address }}</span>
                </div><!-- /timeline-heading -->

                <div class="timeline-body">
                  <p>{{ $iteam_edu->content }}</p>
                </div><!-- /timeline-body -->
              </div> <!-- /timeline-content -->
            </div><!-- /timeline-panel -->
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div><!-- /row -->

  <div class="row">
    <div class="col-md-12">
      <div class="resume-title">
        <h3>Kinh Nghiệm Làm Việc </h3>
      </div>
      <div class="resume">
        <ul class="timeline">
          @foreach($Experiences as $experience)
          <li>
            <div class="posted-date">
              <span class="month">{{ $experience->start }}-{{ $experience->end }}</span>
            </div><!-- /posted-date -->

            <div class="timeline-panel wow fadeInUp">
              <div class="timeline-content">
                <div class="timeline-heading">
                  <h3>{{ $experience->position }}</h3>
                  <span>{{ $experience->company }}</span>
                </div><!-- /timeline-heading -->

                <div class="timeline-body">
                  <p>{{  $experience->content }}</p>
                </div><!-- /timeline-body -->
              </div> <!-- /timeline-content -->
            </div> <!-- /timeline-panel -->
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div><!-- /row -->
</div><!-- /.container -->
</section><!-- End Resume Section -->


<!-- Skills Section -->
<section id="skills" class="skills-section section-padding">
  <div class="container">
    <h2 class="section-title wow fadeInUp">Kỹ Năng Cứng</h2>

    <div class="row">
      <div class="col-md-6">
        @foreach($HardSkillsLeft as $HardSkillLeft)
        <div class="skill-progress">
          <div class="skill-title"><h3>{{ $HardSkillLeft->name }}</h3></div> 
          <div class="progress">
            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="{{ $HardSkillLeft->percent }}" aria-valuemin="0" aria-valuemax="100" ><span>{{ $HardSkillLeft->percent }}%</span>
            </div>
          </div><!-- /.progress -->
        </div><!-- /.skill-progress -->
        @endforeach
      </div><!-- /.col-md-6 -->

      <div class="col-md-6">
        @foreach($HardSkillsRight as $HardSkillRight)
        <div class="skill-progress">
          <div class="skill-title"><h3>{{$HardSkillRight->name}}</h3></div> 
          <div class="progress">
            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="{{$HardSkillRight->percent}}" aria-valuemin="0" aria-valuemax="100" ><span>{{$HardSkillRight->percent}}%</span>
            </div>
          </div><!-- /.progress -->
        </div><!-- /.skill-progress -->
        @endforeach
      </div><!-- /.col-md-6 -->
    </div><!-- /.row -->

    <div class="skill-chart text-center">
      <h3>Kỹ năng mềm</h3>
    </div>

    <div class="row more-skill text-center">
      @foreach($softSkills as $softSkill)
      <div class="col-xs-12 col-sm-4 col-md-2">
        <div class="chart" data-percent="{{ $softSkill->percent}}" data-color="e74c3c">
          <span class="percent"></span>
          <div class="chart-text">
            <span>{{ $softSkill->name}}</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div><!-- /.container -->
</section><!-- End Skills Section -->


<!-- Works Section -->
<section id="works" class="works-section section-padding">
  <div class="container">
    <h2 class="section-title wow fadeInUp">Dự Án Đã Hoàn Thành</h2>

    <ul class="list-inline" id="filter">
      <li><a class="active" data-group="all">All</a></li>
      <li><a data-group="1">Real East</a></li>
      <li><a data-group="2">Education</a></li>
      <li><a data-group="3">Ecommerce</a></li>
      <li><a data-group="4">Profile</a></li>
    </ul>

    <div class="row">
      <div id="grid">
        @foreach($Projects as $Project)
        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "{{$Project->categories}}"]'>
          <div class="portfolio-bg">
            <div class="portfolio">
              <div class="tt-overlay"></div>
              <div class="links">
                <a class="image-link" href="{!! asset('public/client/assets/images/project/'.$Project->images) !!}"><i class="fa fa-search-plus"></i></a>
                <a href="{{$Project->link}}"><i class="fa fa-link"></i></a>                          
              </div><!-- /.links -->
              <img src="{!! asset('public/client/assets/images/project/'.$Project->images) !!}" alt="image" class="img-responsive"> 
              <div class="portfolio-info">
                <h3>{{$Project->title}}</h3>
              </div><!-- /.portfolio-info -->
            </div><!-- /.portfolio -->
          </div><!-- /.portfolio-bg -->
        </div><!-- /.portfolio-item -->
        @endforeach
      </div><!-- /#grid -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- End Works Section -->


<!-- Facts Section -->
<section id="facts" class="facts-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
  <div class="tt-overlay-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="count-wrap">
            <div class="col-sm-3 col-xs-6">
              <i class="fa fa-flask"></i>
              <h3 class="timer"><?php echo(rand(1,3));  ?></h3>
              <p>Năm Kinh Nghiệm</p>
            </div>
            <div class="col-sm-3 col-xs-6"> 
              <i class="fa fa-thumbs-up"></i>
              <h3 class="timer">{{ count($Projects) }}</h3>                
              <p>Dự Án Hoàn Thành</p>
            </div>
            <div class="col-sm-3 col-xs-6">
              <i class="fa fa-users"></i>
              <h3 class="timer"><?php echo(rand(2,20));  ?></h3> 
              <p>Khách Hàng</p>
            </div>
            <div class="col-sm-3 col-xs-6">
              <i class="fa fa-trophy"></i>
              <h3 class="timer"><?php echo(rand(1,5));  ?></h3> 
              <p>Giải Thưởng Lớn</p>
            </div>
          </div><!-- /count-wrap -->
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div>
</section> <!-- End Facts Section -->


<!-- Blog Section -->
<section id="blog" class="latest-blog-section section-padding">
  <div class="container">
    <h2 class="section-title wow fadeInUp">Bài Đăng Mới Nhất</h2>

    <div class="row">
      <div class="col-sm-4">
        <article class="blog-post-wrapper">
          <div class="figure">    
            <div class="post-thumbnail">
              <a href="#"><img src="{{ url('public/client/assets/images/blog/01.jpg') }}" class="img-responsive " alt=""></a>
            </div>
            <i class="fa fa-file-photo-o"></i>
          </div><!-- /.figure -->
          <header class="entry-header">
            <div class="post-meta">
              <span class="the-category"> 
                <a href="#">Print Design,</a> <a href="#">Photoshop</a>
              </span>
            </div>
            <h2 class="entry-title"><a href="#" rel="">Common fonts used for newspaper template design</a></h2>
            <hr>
            <div class="entry-meta">
              <ul class="list-inline">
                <li>
                  <span class="the-author">
                    <a href="#">Admin</a> 
                  </span>
                </li>
                <li>
                  <span class="the-time">
                    <a href="#">06 Jan 2015</a>
                  </span>
                </li>
                <li>
                  <span class="the-share">
                    <a href="#" title="share">30</a>
                  </span>
                </li>
                <li>
                  <span class="the-comments">
                    <a href="#" title="">05</a>
                  </span>
                </li>
              </ul>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->
        </article>
      </div><!-- /.col-sm-4 -->
      <div class="col-sm-4">
        <article class="blog-post-wrapper">
          <div class="figure">    
            <div class="post-thumbnail">
              <a href="#"><img src="{{ url('public/client/assets/images/blog/02.jpg') }}" class="img-responsive " alt=""></a>
            </div>
            <i class="fa fa-file-video-o"></i>
          </div><!-- /.figure -->
          <header class="entry-header">
            <div class="post-meta">
              <span class="the-category"> 
                <a href="#">Print Design,</a> <a href="#">Photoshop</a>
              </span>
            </div>
            <h2 class="entry-title"><a href="#" rel="">What is the style of font called that is typically</a></h2>
            <hr>
            <div class="entry-meta">
              <ul class="list-inline">
                <li>
                  <span class="the-author">
                    <a href="#">Admin</a> 
                  </span>
                </li>
                <li>
                  <span class="the-time">
                    <a href="#">06 Jan 2015</a>
                  </span>
                </li>
                <li>
                  <span class="the-share">
                    <a href="#" title="share">30</a>
                  </span>
                </li>
                <li>
                  <span class="the-comments">
                    <a href="#" title="">05</a>
                  </span>
                </li>
              </ul>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->
        </article>
      </div><!-- /.col-sm-4 -->
      <div class="col-sm-4">
        <article class="blog-post-wrapper">
          <div class="figure">    
            <div class="post-thumbnail">
              <a href="#"><img src="{{ url('public/client/assets/images/blog/03.jpg') }}" class="img-responsive " alt=""></a>
            </div>
            <i class="fa fa-quote-left"></i>
          </div><!-- /.figure -->
          <header class="entry-header">
            <div class="post-meta">
              <span class="the-category"> 
                <a href="#">Print Design,</a> <a href="#">Photoshop</a>
              </span>
            </div>
            <h2 class="entry-title"><a href="#" rel="">How to create a print ready brochure using photoshop</a></h2>
            <hr>
            <div class="entry-meta">
              <ul class="list-inline">
                <li>
                  <span class="the-author">
                    <a href="#">Admin</a> 
                  </span>
                </li>
                <li>
                  <span class="the-time">
                    <a href="#">06 Jan 2015</a>
                  </span>
                </li>
                <li>
                  <span class="the-share">
                    <a href="#" title="share">30</a>
                  </span>
                </li>
                <li>
                  <span class="the-comments">
                    <a href="#" title="">05</a>
                  </span>
                </li>
              </ul>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->
        </article>
      </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
    <div class="blog-more text-center">
      <a href="#" class="btn btn-primary">View More</a>
    </div>

  </div><!-- /.container -->
</section><!-- End Blog Section -->


<!-- Hire Section -->
<section class="hire-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
  <div class="hire-section-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Tôi Là Một Lập Trình Viên Website Chuyên Nghiệp</h2>
          <a href="#" class="btn btn-default">Liên Hệ</a>
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.hire-section-bg -->
</section><!-- End Hire Section -->



<!-- Contact Section -->
<section id="contact" class="contact-section section-padding">
  <div class="container">
    <h2 class="section-title wow fadeInUp">Liên Hệ</h2>

    <div class="row">
      <div class="col-md-6">
        <div class="contact-form">
          <strong>Gửi tin nhắn cho tôi</strong>
          <form name="contact-form" id="contactForm" action="{{ route('post.contact')}}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
              <label for="name">Họ Tên</label>
              <input type="text" name="name" class="form-control" id="name" required="">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" required="">
            </div>

            <div class="form-group">
              <label for="subject">Chủ Đề</label>
              <input type="text" name="subject" class="form-control" id="subject">
            </div>

            <div class="form-group">
              <label for="message">Nội Dung</label>
              <textarea name="message" class="form-control" id="message" rows="5" required=""></textarea>
            </div>

            <button type="submit" id="submit_contact" name="submit" class="btn btn-primary">Gửi Đi</button>
          </form>
        </div><!-- /.contact-form -->
      </div><!-- /.col-md-6 -->

      <div class="col-md-6">
        <div class="row center-xs">
          <div class="col-sm-6">
            <i class="fa fa-map-marker"></i>
            <address>
              <strong>Địa Chỉ</strong>
              02-Nguyễn Đình Chiểu<br>
              Nha Trang<br>
            </address>
          </div>

          <div class="col-sm-6">
            <i class="fa fa-mobile"></i>
            <div class="contact-number">
              <strong>Số Điện Thoại</strong>
              01685800203<br>
              01222424097
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="location-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.660971817363!2d109.1989764143283!3d12.271206833180099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067ed977325b1%3A0xf2e0defc79fb9224!2zMzQgxJBvw6BuIFRy4bqnbiBOZ2hp4buHcCwgVsSpbmggUGjGsOG7m2MsIFRow6BuaCBwaOG7kSBOaGEgVHJhbmcsIEtow6FuaCBIw7JhIDY1MDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2sus!4v1535454641828" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- End Contact Section -->
<script type="text/javascript">
  $( ".resume ul li" ).each(function( index ) {
  if(index % 2==0)
    $( this ).addClass( "timeline-inverted" );
  else
    console.log(index + ": " + 'le');
  });

</script>
@endsection