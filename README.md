Some simple SMPTE functions
===================

### Goals
1. Done: Convert an SMPTE string into its sum as an integer (i.e. its total amount of frames)
2. Done: Convert timecode sum back into an SMPTE string
3. To do: Compute the differences between one timecode and another
4. To do: Traverse a CSV or table of timecodes and write out differences for all of them

Progress: 50% done

### Why?
Because there are so many bad SMPTE calculators out there, most of which do not accept a full SMPTE string pasted into the form (unless you are willing to pay trough your nose), not least a program that iterates trough a list of SMPTE timecodes. This is really useful when dealing with stuff like calculating the difference bitween one timecode and another, for instance when working with online video files that for some reason got out of sync.

I realize PHP might not be the best programming language for the job, so a port to another language is probably in order, say to Java or Javascript. I simply picked it because it is the language I know best. However, since the computation is usually quite trivial and browsers are ubiquitous accross platforms, I see no reason to make a standalone program out of the code (but you're of course free to try if that is what you wish).

### Wish list
It would be cool to make a program (or plugin, say for VLC) that easily and effortlesly logs video files, easily recording markers, section, comments and data that reference points in the film. Currently I do not know any video editor that does this well, even though logging is such an important part of editing.

Maybe this can provide a starting point?

### License
Share away! :)

<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Some simple SMPTE functions</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/kebman/Simple-SMPTE-class-in-PHP.git" property="cc:attributionName" rel="cc:attributionURL">kebman</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/kebman/Simple-SMPTE-class-in-PHP.git" rel="dct:source">https://github.com/kebman/Simple-SMPTE-class-in-PHP.git</a>. 



### Donate
If you like my work, and want me to continue, consider donating bitcoins to 1Dzh4YhhCiCRUQMPNcps9LwVQbvfXaPVdM
