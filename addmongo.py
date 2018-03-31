from pymongo import MongoClient
import datetime
import sys

username = sys.argv[1]
logindate = datetime.datetime.now().strftime("%Y-%m-%d %H:%M")

client = MongoClient('localhost',27017)
db = client.shoes.shoes

template = {
		"username": username, 
		"date": logindate
		}

db.insert(template)