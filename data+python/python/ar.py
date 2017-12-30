import csv;

filename = '/Applications/PostgreSQL/albums.csv'
with open(filename) as f:
 	reader = csv.reader(f)
 	with open('albumout.csv', 'w') as g:
    		writer = csv.writer(g)
 		for row in reader:
 			if (row[2].count('/')>=2):
 				writer.writerow(row)

