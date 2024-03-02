
<div id="gray-footer">
  <div class="container py-5">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="3000">
      <div class="col-md-4 col-12">
        <h4 class=" py-2">
          @lang('trans.who_we_are')
        </h4>
        <p class="p-0 fs-6">
          @lang('trans.who_we_are_desc')
        </p>
      </div>
      <div class="col-md-4 col-12 d-flex justify-content-lg-center">
        <ul class="p-0 fs-6 ">
          <li class="py-1">
            <a href="{{route('Client.policy')}}">
              @lang('trans.replacement_and_after_sales_service')
            </a>
          </li>
          <li class="py-1">
            <a href="sizes.html" type="button" data-bs-toggle="modal" data-bs-target="#size"
               aria-label="Basic outlined example">
             @lang('trans.size_guide')
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 col-12">
        <h4 class="p-2">
          @lang('trans.SocialMedia')
        </h4>
        <ul class="social d-flex p-0">
          <li>
            <a href="#">
              <i class="fab fa-facebook-f icon"></i>
            </a>
          </li>
          <li>
            <a href="#"><i class="fab fa-twitter icon"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-linkedin-in icon"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-google-plus-g icon"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <script>
    AOS.init({
      once: true
    })
  </script>
</div>