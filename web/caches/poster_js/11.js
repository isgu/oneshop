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
 
var cmsAD_11 = new PCMSAD('cmsAD_11'); 
cmsAD_11.PosID = 11; 
cmsAD_11.ADID = 11; 
cmsAD_11.ADType = "images"; 
cmsAD_11.ADName = "banner1"; 
cmsAD_11.ADContent = "{'ADImage':[  {'imgID':'11','imgADLinkUrl':'','imgADAlt':'','ImgPath':'http://www.g-sky.cn/uploadfile/2015/0125/20150125040704267.jpg','imgADLinkTarget':'New','showAlt':'Y'}  , {'imgID':'12','imgADLinkUrl':'','imgADAlt':'','ImgPath':'http://www.g-sky.cn/uploadfile/2015/0125/20150125040716972.jpg','imgADLinkTarget':'New','showAlt':'Y'}  , {'imgID':'13','imgADLinkUrl':'','imgADAlt':'','ImgPath':'http://www.g-sky.cn/uploadfile/2015/0125/20150125040739982.jpg','imgADLinkTarget':'New','showAlt':'Y'} ]}"; 
cmsAD_11.URL = "http://www.g-sky.cn/index.php?m=poster&c=index&a=poster_click"; 
cmsAD_11.SiteID = 1; 
cmsAD_11.Width = 1920; 
cmsAD_11.Height = 643; 
cmsAD_11.UploadFilePath = ""; 
cmsAD_11.ShowAD();
