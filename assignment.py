redo = True
a=0
b=0
while ( redo ):
  x = input("Enter Size Large or Extra Large:")
  if x == "Large" or x == "L" or x == "large" or x == "l":
    a = 6
    break
  elif x == "Extra Large" or x == "extra large" or x == "Extra large" or x == "extra Large" or x == "XL" or x == "Xl" or x == "xl" or x == "xL":
    a= 10
    break
  else:
    print("invalid size")

while (redo): 
  y = input("Enter Amount of Toppings:")

  if y == "1":
    b = b + 1
    break
  elif y == "2":
    b = b + 1.75
    break
  elif y == "3":
    b = b + 2.50
    break
  elif y == "4":
    b = b + 3.35
    break
  elif y == "0":
    b = b + 0
    break
  else: 
    print("invalid amount of toppings")
z = a + b
z = round(float(z)*1.13,2)
print("Your cost is: $", str(z))
