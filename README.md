A Simple PHP SMPTE class
===================

Some simple functions to deal with SMPTE code

### Goal:

1. Turn formatted SMPTE code into an array of hours, minutes, seconds and frames
2. Sum the array up into frames, so that it's more easy to add and subtract from other sets of SMPTE frames
3. Sum the frames back up into an array
4. Turn the array into a formatted SMPTE code again

Eat a banana

### In other words
1. Fetch SMPTE code A, turn into array (or anything more handy), and turn array into total number of frames
2. Fetch SMPTE code B, turn into array (or anything more handy), and turn array into total number of frames
3. Add or subtract frames
4. Get result
5. Turn result into array
6. Turn array into SMPTE code C

Streamline so the algorithm can read and compute a CSV of SMPTEs, given a difference

_And we're done!_

Eat another banana

#### Wish list
* Easily spot and calculate differences for logging purposes
* Manipulate many time codes at once
* Update time codes, say in a CSV file, based on a time difference

Ultimate goal: Create a program for logging online clips and takes 
(hm, might need a fork to another language, as PHP probably wont't cut it)

### Please share, comment or correct :)

If there's a better way to do this, I'd really like to know

#### To do
Make into a class
Add stuff to read CSV, EDL, etc

#### Why?
Because I got fed up with the bad SMPTE calculators. I want to read loads of codes at once, so I just started doodling a bit in the language I know best.

### Donate
If you like my work, and want me to continue, consider donating bitcoins to 1Dzh4YhhCiCRUQMPNcps9LwVQbvfXaPVdM
