#!/usr/bin/perl

my $c = 1;
my $a = $b || $c;
# 1 at sample/ch04/02-null-perl.pl line 6.
warn $a;
