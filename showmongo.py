from pymongo import MongoClient

client = MongoClient('localhost',27017)
db = client.shoes.shoes

cursor = db.find()

for document in cursor:
	print(document['username'] + ',', document['date'])