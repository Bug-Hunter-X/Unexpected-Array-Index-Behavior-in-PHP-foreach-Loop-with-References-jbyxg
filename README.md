# PHP Foreach Loop with Reference Modification Bug

This repository demonstrates a subtle bug in PHP related to using references in foreach loops when modifying the array being iterated over.  The bug occurs when adding elements to the array during the loop, causing the loop's iteration to extend beyond the original size of the array and leading to unexpected index values.

## Bug Description

The `bug.php` file contains a function `increment_array` that attempts to increment each element of an array passed by reference. However, due to how the reference modifies the array and iteration, new indexes are created during iteration.

## Solution

The `bugSolution.php` file provides a corrected version that avoids directly modifying the array during iteration, thereby resolving the unexpected index behavior.

## How to reproduce

1. Clone this repository.
2. Run `php bug.php` to observe the unexpected behavior.
3. Run `php bugSolution.php` to see the corrected output.