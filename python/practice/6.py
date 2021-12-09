income = 4000

def calculateTax(inc):
    tax = 0
    if(inc >1000):
        if(inc>2000):
            tax = (inc-2000)*0.2 + 100
            return tax
        else:
            tax=(inc-1000)*0.1
            return tax

print(calculateTax(4000))