var spinning = false;

function cokeScene()
{
	switchNum = 0;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', switchNum)
}
function oasisScene()
{
	switchNum = 1;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', switchNum)
}
function fantaScene()
{
	switchNum = 2;
	document.getElementById('SceneSwitch').setAttribute('whichChoice', switchNum)
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('wire')
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__back').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__left').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__right').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__top').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__bottom').setAttribute('bind', 'true');
}