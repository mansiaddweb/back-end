t = {
"name": "Kelly",
"age": 25,
"salary": 8000,
"city": "New york"} 
key =["name","salary"]
s={}
# for keys in t:
for i in range(len(key)):
    s[(key[i])] = t.get(key[i])

print(s)