var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__Line001-TIMER').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Line001-TIMER').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__Line001-TIMER').getAttribute('enabled')!= 'true')
        document.getElementById('model__Line001-TIMER').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Line001-TIMER').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__NavInfo001').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__Front').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__Back').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__Left').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__Right').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__Top').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__Bottom').setAttribute('bind', 'true');
}