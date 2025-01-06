# Mouad Garroud
import math
def main():
    try:
        i = int(input("First: "))
        print("Choose (1 +) (2 *) (3 /) (4 -) (5 sqrt) (6 abs) (7 %) (8 compare) (9 exp) (10 <<) (11 >>) (12 &) (13 |): ", end="")
        x = int(input())

        if x == 1:
            o = int(input("Second: "))
            print("The sum:", i + o)
        elif x == 2:
            o = int(input("Second: "))
            print("The product:", i * o)
        elif x == 3:
            o = int(input("Second: "))
            if o == 0:
                print(f"Not possible because the second number {o} is zero")
            else:
                print("The division:", i / o)
        elif x == 4:
            o = int(input("Second: "))
            print("The difference:", i - o)
        elif x == 5:
            if i < 0:
                print(f"{i} is a negative number, cannot compute square root.")
            else:
                print(f"The square root of {i} is {math.sqrt(i)}")
        elif x == 6:
            print(f"The absolute value of {i} is {abs(i)}")
        elif x == 7:
            o = int(input("Second: "))
            if o <= 0:
                print("The second number should be positive")
            else:
                print("The modulo is:", i % o)
        elif x == 8:
            o = int(input("Second: "))
            if i < o:
                print(f"The second number {o} is bigger than the first number {i}")
            elif i > o:
                print(f"The first number {i} is bigger than the second number {o}")
            else:
                print(f"The two numbers are equal: {i} = {o}")
        elif x == 9:
            o = int(input("Exponent: "))
            print(f"The result of {i} raised to the power of {o} is {math.pow(i, o)}")
        elif x == 10:
            o = int(input("Second: "))
            print("The result of left shift:", i << o)
        elif x == 11:
            o = int(input("Second: "))
            print("The result of right shift:", i >> o)
        elif x == 12:
            o = int(input("Second: "))
            print("The result of bitwise AND:", i & o)
        elif x == 13:
            o = int(input("Second: "))
            print("The result of bitwise OR:", i | o)
        else:
            print("Invalid operation")
    except ValueError as e:
        print("Invalid input:", e)

if __name__ == "__main__":
    main()
