print("Raise Exception")
try:
    a=100
    b=2
    z=a/2
    if z>10:
        raise ValueError(z)
except ValueError:
    print(z,"is out of the allowed range")
else:
    print(z,"is within the allowed range")
