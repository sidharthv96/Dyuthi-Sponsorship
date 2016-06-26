lantern="images/lantern2.png";

WinWidth = $(window).width();
WinHeight = $(window).height();
var speedAll = 1	;
var totalLanterns = Math.round(Math.random()*5+14);
if(WinWidth< 500)
	totalLanterns=10;
var size = 30;
var cursorX;
var cursorY;
document.onmousemove = function(e){
    cursorX = e.pageX;
    cursorY = e.pageY;
}
Ypos=new Array();
Xpos=new Array();
Zpos=new Array();
Speed = new Array();
startYPos = new Array();
CStrafe=new Array();
Strafe=new Array();
height = new Array();
dir= new Array();
width = new Array();
hSpeed=new Array();
xhSpeed=new Array();

var counter = 0;
var lanterns=$('#lanterncontainer');
opacitylantern = new Array();
window.onload=function(){
	for (i = 0 ;i < totalLanterns;i++){
		 dir[i]=Math.random()<0.5 ? true: false;
		 width[i]=Math.round(Math.random()*size+35);
		 height[i]=Math.round(Math.random()*size+45);
		 if(WinWidth<500)
		 {
		 	 width[i]=Math.round(Math.random()*size+17);
			 height[i]=Math.round(Math.random()*size+20);

		 }
		 if (width[i] > height[i]*1.3 || height[i] > width[i]*1.3)
			width[i] = height[i];

		 Ypos[i] = Math.random() * 400+WinHeight;
		 Xpos[i] = Math.round(Math.random()*(WinWidth)-width[i]*3);
		 Zpos[i]= Math.min(width[i],height[i])+30;
		 opacitylantern[i] = 1;
		 Speed[i]= Math.random()*speedAll + 2;
		 hSpeed[i]=Speed[i];
		 xhSpeed[i]=0;
		 CStrafe[i]=0;
		 Strafe[i]=Math.random()*0.06 + 0.03;
		 var blur=Math.max(1.02,(width[i]/55+0.2));
		 if(WinWidth<500)
		 {
		 	blur=Math.max(1.02,(width[i]/30+0.2));
		 }
		 var newlantern='<img class="lanterns'+i+'" src="'+lantern+'" style="background-color:none; -webkit-filter: blur('+blur+'px)  saturate('+((Zpos[i]*3+120))+'%); z-index:'+Math.round(Zpos[i])+';position:absolute;top:'+Ypos[i]+'px;left:'+Xpos[i]+'px;height:'+height[i]+'px;width:'+width[i]+'px;opacity:'+opacitylantern[i]+';">';
		 document.getElementById('lanterncontainer').innerHTML+=newlantern;
	}
	setTimeout(fallinglanterns,100)
}
function fallinglanterns(){

	for (i = 0 ;i < totalLanterns;i++)
    {
		strafey = - Speed[i]*Math.sin(90*Math.PI/180)
		// if( Ypos[i]<cursorY+50 && Ypos[i] > cursorY - 50 && Xpos[i]<cursorX+50 && Xpos[i] > cursorX - 50)
		// {


		// 	if(cursorX>(Xpos[i]+width[i]/2))
		// 		strafex=Math.abs(Speed[i]*Math.cos(CStrafe[i]));
		// 	else
		// 		strafex=-Math.abs(Speed[i]*Math.cos(CStrafe[i]));

		// }
		// else
		//

		xhSpeed[i]*=0.96;
		// console.log(xhSpeed[i]);
		if(dir[i])
			strafex = xhSpeed[i]+hSpeed[i]-1.5;//-Speed[i]*Math.cos(CStrafe[i])-1;//Math.sin(CStrafe[i]);
		else
			strafex = -xhSpeed[i]-hSpeed[i]+1.5//+Speed[i]*Math.cos(CStrafe[i])+1;
		if( Ypos[i]<cursorY+150 && Ypos[i] > cursorY - 150 && Xpos[i]<cursorX+150 && Xpos[i] > cursorX - 150)
		{
		//	console.log(Ypos[i],Xpos[i],cursorY,cursorX);





			if(cursorX>(Xpos[i]+width[i]/2))
			{
				Xpos[i]-= Math.abs(hSpeed[i]+xhSpeed[i]);
				dir[i]=false;

				// console.log(0.01+(150-(cursorX-(Xpos[i]+width[i]/2)))/700);
				xhSpeed[i]+=0.01+(150-(cursorX-(Xpos[i]+width[i]/2)))/700;

			}
			else{
				Xpos[i]+=Math.abs(hSpeed[i]+xhSpeed[i]);
				dir[i]=true;
				console.log((cursorX-(Xpos[i]+width[i]/2)));
				xhSpeed[i]+=0.01+(150+(cursorX-(Xpos[i]+width[i]/2)))/750;

			}

			Ypos[i]+=strafey;
		}
		else{
			Ypos[i]+=strafey;
			Xpos[i]+=strafex;
		}
		if (Ypos[i] > WinHeight){
				opacitylantern[i]=1;
				$(".lanterns"+i).css({opacity:opacitylantern[i]});

		}
		if (  Ypos[i] < WinHeight / 6){
				opacitylantern[i]-=0.01;
				$(".lanterns"+i).css({opacity:opacitylantern[i]});

		}
		if (Ypos[i] < 0){

			Ypos[i]=WinHeight+50;
			Xpos[i]=Math.round(Math.random()*WinWidth-width[i]*4);
			Speed[i]= Math.random()*speedAll + 2;
			hSpeed[i]=Speed[i];
		}
		$(".lanterns"+i).css({top: Ypos[i], left: Xpos[i]});

		CStrafe[i]+=Strafe[i];
    }

	setTimeout(fallinglanterns,45);

}
