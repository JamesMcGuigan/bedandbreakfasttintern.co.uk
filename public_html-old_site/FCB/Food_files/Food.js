// Created by iWeb 3.0.1 local-build-20100708

setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({shadow_0:new IWShadow({blurRadius:10,offset:new IWPoint(-1.0419,5.9088),color:'#b3b3b3',opacity:0.750000}),stroke_0:new IWPhotoFrame([IWCreateImage('Food_files/Watercolor_iweb_01.png'),IWCreateImage('Food_files/Watercolor_iweb_02.png'),IWCreateImage('Food_files/Watercolor_iweb_04.png'),IWCreateImage('Food_files/Watercolor_iweb_08.png'),IWCreateImage('Food_files/Watercolor_iweb_16.png'),IWCreateImage('Food_files/Watercolor_iweb_14.png'),IWCreateImage('Food_files/Watercolor_iweb_13.png'),IWCreateImage('Food_files/Watercolor_iweb_05.png')],null,0,0.800000,0.000000,0.000000,0.000000,0.000000,12.000000,12.000000,11.000000,11.000000,13.000000,12.000000,13.000000,12.000000,null,null,null,0.500000)});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('Food_files/FoodMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');fixupAllIEPNGBGs();fixAllIEPNGs('Media/transparent.gif');applyEffects()}
