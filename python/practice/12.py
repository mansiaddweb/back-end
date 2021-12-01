list1 = ["Mike", "", "Emma", "Kelly", "", "Brad"]
for i in range(list1.count("")):

    list1.remove("")
print(list1)