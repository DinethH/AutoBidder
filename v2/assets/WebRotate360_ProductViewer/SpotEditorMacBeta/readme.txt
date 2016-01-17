There are two prerequisites that you will need before SpotEditor can run on Mac which the app will warn you about if they are not installed already:

1) X Windowing Layer (X11), which is often already installed on older Mac machines under Applications->Utilities 
or bundled with Mac Install DVD (and also required if you run apps such as GIMP, Matlab or OpenOffice for example)
but may need to be downloaded and installed manually if you are running newer releases of Mac OS. The XQuartz project 
provides this free software and you can download the most recent version of X11 app on their website here:

http://xquartz.macosforge.org/landing/

2) Free Mono Framework build 2.10.9_12 that you can download from Mono website using this link:
http://download.mono-project.com/archive/2.10.9/macos-10-x86/12/MonoFramework-MDK-2.10.9_12.macos10.xamarin.x86.dmg

To learn more about Mono project, please visit this page:
http://www.mono-project.com/About


Simply copy SpotEditor.app on your desktop or under Applications and you are ready to go. The very first run of SpotEditor may not be successful (due to a known issue with X11 on Mac) - just run it one more time and it should be starting fine from now on.