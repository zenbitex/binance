<?php 
$this->load->view('include/all_header');
$this->load->view('include/ajax');


?>
 <style>
.wrap {
  background: #f7f7f7;
  min-width: 1200px;
}

.container {
  width: 1200px;
  margin: 0 auto;
}

.midContainer {
  width: 100%;
  margin: 0 auto;
  background: #fff;
}

.alerta {
    margin: 15px auto;
    color: #b48728;
    font-size: 12px;
    background: #fcf8e5;
    border: 1px solid #f8ebcf;
    height: 40px;line-height: 40px;
    padding-left: 18px;padding: 0 0 0 18px;
    width: 940px
}

.safetitle {
  font-size: 18px;
  line-height: 7px;
  color: #454545;
  padding: 13px 0 13px 18px;
  border-bottom: 1px solid #efefef;
  text-align: center;
}

.safecontent {
  color: #666;
  font-size: 14px;
}

.safecontent form {
  margin: 60px auto;
  width: 470px;
}

.safecontent form label {
  font-size: 14px;
  color: #666;
  display: block;
  margin-bottom: 12px;
  display: inline-block;
  width: 166px;
  text-align: right;
}

.safecontent form input {
  display: inline-block;
  height: 32px;
  border: 1px solid #d4d4d4;
  width: 270px;
  box-sizing: border-box;
  padding: 0 10px;
  color: #333;
}

.safecontent form .ipt-code {
  width: 195px;
}

.safecontent form .btn {
  padding: 10px 0;
  width: 250px;
  text-align: center;
  vertical-align: middle;
  font-size: 16px;					
}

.safecontent form .btn:hover {
  color: #e8b342;
}

.country {
  display: inline-block;
  width:72px;
  text-align: center;
  border: 1px solid #d4d4d4;
  margin-right: -5px;
  border-right: none;
  height: 32px;
  line-height: 32px;
  vertical-align: top;
}

.country-list {
      width: 375px;
    position: absolute;
    top: 34px;
    left: 162px;
    z-index: 99999999;
}
.country-list ul{
border: 1px solid #d4d4d4;

background: #fff
}
.countryry-list ul li {
  padding: 0 7px;
  height: 31px;
  line-height: 31px;

}
.country-list ul li:hover{color: #e8b342;background: #fdfaf5}

.country-list ul li div{
height:31px;
  border-bottom: 1px solid #d4d4d4;
  }
.country-list ul li:last-of-type div{border-bottom: none}
.scrollStyle{overflow-y:auto;   height: 163px;} 
</style>
  
	
		
		<div class="main">
			<div class="container">
			
				<div class="kline-para">
					
				</div>
			
				<div class="main-body">
				
					
					<div class="main-left">
						
						<div>
							<div  id="askScrollBox" >
	
							</div>
							
							<div  id="bidScrollBox" >
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="container midContainer" ng-controller="modifyPwdCtr">
				  
				  <div class="safetitle" style="background: gray; text-align: center; color: #fff; ">Support</div>
				  <div class="safecontent">
				    <div class="addressManament-form">
				    <?php if($this->session->flashdata('success')){ ?>
				            <div class="alert alert-block alert-success">
				                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
				                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
				            </div>
				        <?php }else if($this->session->flashdata('error')){  ?>
				            <div class="alert alert-block alert-danger">
				                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
				                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
				           </div>
				           <?php } ?> 
				      <div class="leftBox">
				        <form action="<?php echo support_url();?>support/support" method="post" id="changepassform">
				         
				          <div class="filed">
				            <label>Subject: </label> 
				            <input id="subject" name="subject"   type="text" required placeholder="Subject" />
				             
				          </div>
				          <div class="filed">
				            <label style="position: relative;top: -90px;">Message: </label> 
				            <textarea  name="message" rows="7" cols="33"  required placeholder="message" style="padding: 0 10px;
    border: 1px solid #dcdcdc;border-radius: 3px;" ></textarea>
				           
				             
				          </div>
				        
				          
				          <div class="filed">
				            <label></label> 
				            <input type="submit" value="Send" class="btn btn-orange" style="width: 156px; text-align: center; padding: 8px 20px; border-radius: 25px;" />
				          </div>
				        </form>
				      </div>
				    

				    </div>
				  </div>
				
				
				
			</div>
		</div>
		
		
		<?php $this->load->view('include/footer');  ?>
	<script src="https://resource.binance.com/resources/js/isMobile.js" type="text/javascript" charset="utf-8"></script>

		<script type="text/javascript">
			
			  $(document).ready(function() {
    setTimeout(function(){ $(".alert").hide(); }, 10000);});
		</script>

		
	<script>
	
	
	$(function(){
		$('.show-or-hide').click(function(){
			$(this).toggleClass("active");
			if($(this).hasClass('active')){
				//stop();
				$('.index-news-con').css('height','72px');
			}else{
				//stop();
				//scrollTop('#roll');
				$('.index-news-con').css('height','24px');
			}
		});
		
		$("#ctrl .icon-rightsj").click(function(){
			var box=$(this).parents('.item-con')
			var scrollLeft=box.scrollLeft();
			scrollLeft+=58;
			box.animate({"scrollLeft":scrollLeft},500)
		})
		$("#ctrl .icon-leftsj").click(function(){
			var box=$(this).parents('.item-con')
			var scrollLeft=box.scrollLeft();
			scrollLeft-=58;
			box.animate({"scrollLeft":scrollLeft},500)
		})
		
		$('.toolTip').on('click',function(e){
			e.stopPropagation();
			$(this).find('div').fadeIn();
			$(document).not(this).on('click',function(){
				$('.toolTip>div').fadeOut();
			})
		});
		
		
		/* $(".productSymbol").hover(function(){
			$(".info-tips").show();
		},function(){
			$(".info-tips").hide();
		}); */
		
		$(document).on("mouseover",".productSymbol",function(){
			$(".info-tips").show();
		});
		$(document).on("mouseout",".productSymbol",function(){
			$(".info-tips").hide();
		});
		
		
	})
	
	  function googleTranslateElementInit(lang) {
			new google.translate.TranslateElement({pageLanguage: lang, layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	  }
	  if(initLang!='cn'){
		setTimeout(function(){
			document.getElementById('pageLoading').style.display='none';
		},3000)
		var script=document.createElement('script');
		script.src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
		document.body.appendChild(script);
		script.onload=function(){
			googleTranslateElementInit(initLang);
		}
	  }
	
	</script>

	
	
	</body>
</html>

