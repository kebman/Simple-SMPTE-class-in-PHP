PHP-SMPTE-functions
===================

Some functions to deal with SMPTE code

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
