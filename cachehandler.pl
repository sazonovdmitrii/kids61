#! /usr/bin/perl
use DBI;
use Data::Dumper;
use LWP::Simple;
#use MIME::Lite;
use Time::Piece;
$dbh = DBI->connect('dbi:mysql:kids610','sazon','everest1024') or die "Connection Error: $DBI::errstr\n";
$sql = "SELECT * FROM core_url_rewrite GROUP BY request_path";
$sth = $dbh->prepare($sql);
$sth->execute or die "SQL ERROR";
$site_url = 'http://kids61.ru/';
while(@row = $sth->fetchrow_array) {
    get( $site_url.@row[3] );
}
open(my $fh, '>', 'отчет.txt');
print $fh localtime->datetime(T => q{ });
close $fh;
print "Completed";
