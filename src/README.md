# WeFabric INSBOU003 package

This package can convert INSBOU003 XML files to data classes, and data to INSBOU003 XML files.

## Installation

For installation run

```composer require wefabric/insbou003-converter```

##Translation

Since this is a regionally used format, the translations are in Dutch.

## Formats

Whenever you see a ```datum``` or ```tijd``` variable, you can read these in a specific format.

### Datum

is Dutch for 'date'. The given value is in the format ```yyyyMMdd```, so a value of '20211101' can be read as '2021-11-01' or November 1st, 2021.

### Tijd

is Dutch for 'time' (of day). The given value is in the 24H format ```HHmm```, so a value of '0944' can be read as '09:44' or almost a quarter to ten in the morning.

## Remarks

### Order-class

There are two ```Order```-classes. There is one located inside the ```DET```-class and one inside the ```HDR```-class. 
It's not clear given the example XML, whether these can be merged to one class.