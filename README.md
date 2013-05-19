A simple SMPTE class in PHP
===================

### What? 
In the library folder you'll find a simple PHP class <code>timecode.php</code> for dealing with SMPTE timecodes.<sup><a href="#timecodes">1</a></sup> 

The methods in the class converts a timecode into frames so you can do simple math operations on it, and then turns it back to a timecode again.

The best feature of this class is probably that it lets you convert a whole list or array of codes with relatively little tweaking, however this feature is still under development.

Check out the Wiki for a more technical walk-trough.

### Why?
Because there are so many bad SMPTE calculators out there, most of which do not accept a full SMPTE string pasted into the form (unless you are willing to pay trough your nose). Also I couldn't find a free calculator that actually could process a wohle list<sup><a href="#timelist">2</a></sup> of timecodes.

I realize PHP might not be the best programming language for the job, so a port to another language is probably in order, say to Java or Javascript. I simply picked it because it is the language I know best. However, since the computation is usually quite trivial and browsers are ubiquitous accross platforms, I see no reason to make a standalone program out of the code (but you're of course free to do so if that is what you wish).

### Progress
Currently the project has reached what I consider Verson 1. Although a break is in order, I may very well resume the project to incorporate better validation methods (for instance also correcting dot and semicolon separated codes), and not least better methods for lists of timecodes and whole files with them.

1. Done: Convert an SMPTE string into its sum as an integer (i.e. its total amount of frames)
2. Done: Convert timecode sum back into an SMPTE string
3. Done: Compute the differences between one timecode and another (v1)
4. To do: Traverse a CSV or table of timecodes and write out differences for all of them (v2)

Progress: 66.6% done

### Wish list
It would be cool to make a program (or plugin, say for VLC) that easily and effortlesly logs video files, easily recording markers, section, comments and data that reference points in the film. Currently I do not know any video editor that does this well, even though logging is such an important part of editing. 

However this kind of programming is beyond my own ambition and level, but maybe you would like to give it a try? If so, please fork my code! 

### License
As long as you don't plan on earning money on it, and remember to give credit where it is due, then share away! :) Corrections, forks and contributions are also welcome.

<a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Simple SMPTE class in PHP</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/kebman/Simple-SMPTE-class-in-PHP.git" property="cc:attributionName" rel="cc:attributionURL">kebman</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/kebman/Simple-SMPTE-class-in-PHP.git" rel="dct:source">https://github.com/kebman/Simple-SMPTE-class-in-PHP.git</a>.

### Donate
If you like my work and want me to continue, consider donating to 1Dzh4YhhCiCRUQMPNcps9LwVQbvfXaPVdM

### Notes
<sup><a id="timecodes">1</a></sup> A timecode is simply a point in a film, a clip or movie. It is written <code>hh:mm:ss:ff</code>, where h = hours, m = minutes, s = seconds and f = frames. The point usually represents a single frame in the film, but it can also represent a duration, or an in-point and an out-point. It is used both for editing the film, but also logging clips by providing notes and info next to the timecode, thus the SMPTE timecode is an indispensible tool for keeping track of your film project. Here's what Wikipedia says about the <a href="http://en.wikipedia.org/wiki/SMPTE_timecode">SMPTE code</a>. 

<sup><a id="timelist">2</a></sup> It is often useful to convert a full list of timecodes to correct sync issues, for instance when you've made changes to an online sub-section of a clip that has a different starting point than the original clip.
