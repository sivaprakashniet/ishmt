 <header>
    <div class="container clearfix">
      <div class="row ">
        <div class="span12">
          <h1 class="brand brand_"><a href="index.php"><img src="img/logo.png" alt=""></a></h1>
          <div class="box-soc-adress">
            <ul class="list-soc"><!-- 
              <li><a href="#"><img alt="" src="img/header-twitter.png"></a></li>
              <li><a href="#"><img alt="" src="img/header-facebook.png"></a></li> -->
            </ul>
            <div class="clear"></div>
            <div class="phone-1">Tel: +91 9842743380</div>
            <div class="clear"></div>
            <div class="address-1">3301 Chennai, Tamilnadu India</div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
          <div class="row-nav-search">
            <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
              <div class="clearfix">
                <input type="text" onFocus="if(this.value =='Enter search keywords here' ) this.value=''" 
              onBlur="if(this.value=='') this.value='Enter search keywords here'" 
              value="Enter search keywords here" name="s">
                <a href="#" onClick="document.getElementById('search').submit()" ></a> </div>
            </form>
            <div class="navbar navbar_">
              <div class="container">
                <!--=========== menu ===============-->
                <div class="nav-collapse nav-collapse_ collapse">
                {!!Menu::menu('menu')!!}
                </div>
                
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </header>