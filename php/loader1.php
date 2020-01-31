<div class="lds-css ng-scope Animcont" style="z-index:500001;width: 100vw; height: 100vh; background-color:white;">
<div class="lds-blocks" style="width:100%;height:100%; left: 50%; top: 45%; transform: translate(-50%, -50%);"><div style="left:38px;top:38px;animation-delay:0s"></div><div style="left:80px;top:38px;animation-delay:0.1625s"></div><div style="left:122px;top:38px;animation-delay:0.325s"></div><div style="left:38px;top:80px;animation-delay:1.1375s"></div><div style="left:122px;top:80px;animation-delay:0.48750000000000004s"></div><div style="left:38px;top:122px;animation-delay:0.9750000000000001s"></div><div style="left:80px;top:122px;animation-delay:0.8125s"></div><div style="left:122px;top:122px;animation-delay:0.65s"></div></div>
<style type="text/css">
*{
    /*overflow-x:hidden;*/
    /*overflow-y:hidden;*/
}
@keyframes lds-blocks {
  0% {
    background: #5699d2;
  }
  12.5% {
    background: #5699d2;
  }
  12.625% {
    background: #1d3f72;
  }
  100% {
    background: #1d3f72;
  }
}
@-webkit-keyframes lds-blocks {
  0% {
    background: #5699d2;
  }
  12.5% {
    background: #5699d2;
  }
  12.625% {
    background: #1d3f72;
  }
  100% {
    background: #1d3f72;
  }
}
.lds-blocks {
  position: relative;
}
.lds-blocks div {
  position: absolute;
  width: 40px;
  height: 40px;
  background: #1d3f72;
  -webkit-animation: lds-blocks 1.3s linear infinite;
  animation: lds-blocks 1.3s linear infinite;
}
.lds-blocks {
  width: 200px !important;
  height: 200px !important;
  -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
  transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
}
</style></div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(window).on("load", function(){
    $(".Animcont").fadeOut("slow");
  });
</script>