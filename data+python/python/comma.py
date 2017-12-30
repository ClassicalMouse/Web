import csv

df = pd.read_csv('/Applications/PostgreSQL/artists.csv')

filename = '/Applications/PostgreSQL/artists.csv'
with open(filename) as f:
 	reader = csv.reader(f)
 	with open('out.csv', 'w') as g:
   		writer = csv.writer(g)
		for row in reader:
 			if len(row)==2:
 				row.append(' ')
 				writer.writerow(row)
 			else:
 				writer.writerow(row)


 				
#import pandas as pd
		#if len(row)==3:
		#	out.write("%s, %s, %s"(row[0],row[1],row[2]))
		#elif len(row)==2:
		#	out.write("%s, %s,"(row[0],row[1]))
		
