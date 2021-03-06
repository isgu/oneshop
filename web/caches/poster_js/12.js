function PCMSAD(PID) {
  this.ID        = PID;
  this.PosID  = 0; 
  this.ADID		  = 0;
  this.ADType	  = "";
  this.ADName	  = "";
  this.ADContent = "";
  this.PaddingLeft = 0;
  this.PaddingTop  = 0;
  this.Width = 0;
  this.Height = 0;
  this.IsHitCount = "N";
  this.UploadFilePath = "";
  this.URL = "";
  this.SiteID = 0;
  this.ShowAD  = showADContent;
  this.Stat = statAD;
}

function statAD(id) {
	var sp = document.createElement("SCRIPT");
	sp.type = "text/javascript";
	sp.src = "http://www.g-sky.cn/index.php?m=poster&c=index&a=show&siteid="+this.SiteID+"&id="+id+"&spaceid="+this.PosID;
	document.body.appendChild(sp);
}

function showADContent() {
  var content = this.ADContent;
  var isIE=!!window.ActiveXObject;
  var str = "<ul id='PCMSAD_"+this.PosID+"'>";
  var AD = eval('('+content+')');
  var count = 0;
  if(AD.ADImage.length){
	  count = AD.ADImage.length;
  }
  for(var i=0;i<count;i++){
	if (isIE){

		if (document.readyState=="complete"){
			this.Stat(AD.ADImage[i].imgID);
		} else {
			document.onreadystatechange=function(){
				if(document.readyState=="complete") this.Stat(AD.ADImage[i].imgID);
			}
		}
	} else {
		this.Stat(AD.ADImage[i].imgID);
	}
	  str += "<li><a href='"+this.URL+"&siteid="+this.SiteID+"&id="+AD.ADImage[i].imgID+"&url="+AD.ADImage[i].imgADLinkUrl+"' target='_blank'><img alt='"+AD.ADImage[i].imgADAlt+"' title='"+AD.ADImage[i].imgADAlt+"' src='"+this.UploadFilePath+AD.ADImage[i].ImgPath+"' ";
	  var sizeStr = "";
	  if(this.Width==0&&this.Height>0){
		  sizeStr = " height='"+this.Height+"' ";
	  }else if(this.Width>0&&this.Height==0){
		  sizeStr = " width='"+this.Width+"' ";
	  }else{
		  sizeStr = (this.Width < this.Height) ? " width='"+this.Width+"' " : " height='"+this.Height+"' ";
	  }
	  str += sizeStr;
	  str += " style='border:0px;'/></a></li>";
	}
  str += "</ul>";
  document.write(str);
}
 
var cmsAD_17 = new PCMSAD('cmsAD_17'); 
cmsAD_17.PosID = 12; 
cmsAD_17.ADID = 17; 
cmsAD_17.ADType = "images"; 
cmsAD_17.ADName = "开放部分源码 二次开发"; 
cmsAD_17.ADContent = "{'ADImage':[  {'imgID':'17','imgADLinkUrl':'','imgADAlt':'开放平台','ImgPath':'http://www.g-sky.cn/uploadfile/2015/0125/20150125040919485.png','imgADLinkTarget':'New','showAlt':'Y'}  , {'imgID':'16','imgADLinkUrl':'','imgADAlt':'校车监控方案','ImgPath':'http://www.g-sky.cn/uploadfile/2015/0125/20150125040935114.png','imgADLinkTarget':'New','showAlt':'Y'}  , {'imgID':'15','imgADLinkUrl':'','imgADAlt':'Cam123','ImgPath':'http://www.g-sky.cn/uploadfile/2015/0125/20150125041006422.png','imgADLinkTarget':'New','showAlt':'Y'}  , {'imgID':'14','imgADLinkUrl':'','imgADAlt':'CMSV6','ImgPath':'http://www.g-sky.cn/uploadfile/2015/0125/20150125041019667.png','imgADLinkTarget':'New','showAlt':'Y'} ]}"; 
cmsAD_17.URL = "http://www.g-sky.cn/index.php?m=poster&c=index&a=poster_click"; 
cmsAD_17.SiteID = 1; 
cmsAD_17.Width = 100; 
cmsAD_17.Height = 100; 
cmsAD_17.UploadFilePath = ""; 
cmsAD_17.ShowAD();
