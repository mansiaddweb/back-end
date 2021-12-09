dict1 = {
"name": "Kelly",
"age":25,
"salary": 8000,
"city": "New york"
}
dict1["location"]=dict1["city"]
del dict1["city"]
print(dict1)