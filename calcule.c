//Mouad Garroud
#include <stdio.h>
#include <math.h>
#include <stdlib.h>

int main() {
    int i, x, o;
    printf("First: ");
    scanf("%d", &i);
    
    printf("Choose (1 +) (2 *) (3 /) (4 -) (5 sqrt) (6 abs) (7 %) (8 compare) (9 exp) (10 <<) (11 >>) (12 &) (13 |): ");
    scanf("%d", &x);

    switch (x) {
        case 1:
            printf("Second: ");
            scanf("%d", &o);
            printf("The sum: %d\n", i + o);
            break;
        case 2:
            printf("Second: ");
            scanf("%d", &o);
            printf("The product: %d\n", i * o);
            break;
        case 3:
            printf("Second: ");
            scanf("%d", &o);
            if (o == 0) {
                printf("Not possible because the second number %d is zero\n", o);
            } else {
                printf("The division: %.2f\n", (double)i / o);
            }
            break;
        case 4:
            printf("Second: ");
            scanf("%d", &o);
            printf("The difference: %d\n", i - o);
            break;
        case 5:
            if (i < 0) {
                printf("%d is a negative number, cannot compute square root.\n", i);
            } else {
                printf("The square root of %d is %.2f\n", i, sqrt(i));
            }
            break;
        case 6:
            printf("The absolute value of %d is %d\n", i, abs(i));
            break;
        case 7:
            printf("Second: ");
            scanf("%d", &o);
            if (o <= 0) {
                printf("The second number should be positive\n");
            } else {
                printf("The modulo is: %d\n", i % o);
            }
            break;
        case 8:
            printf("Second: ");
            scanf("%d", &o);
            if (i < o) {
                printf("The second number %d is bigger than the first number %d\n", o, i);
            } else if (i > o) {
                printf("The first number %d is bigger than the second number %d\n", i, o);
            } else {
                printf("The two numbers are equal: %d = %d\n", i, o);
            }
            break;
        case 9:
            printf("Exponent: ");
            scanf("%d", &o);
            printf("The result of %d raised to the power of %d is %.2f\n", i, o, pow(i, o));
            break;
        case 10:
            printf("Second: ");
            scanf("%d", &o);
            printf("The result of left shift: %d\n", i << o);
            break;
        case 11:
            printf("Second: ");
            scanf("%d", &o);
            printf("The result of right shift: %d\n", i >> o);
            break;
        case 12:
            printf("Second: ");
            scanf("%d", &o);
            printf("The result of bitwise AND: %d\n", i & o);
            break;
        case 13:
            printf("Second: ");
            scanf("%d", &o);
            printf("The result of bitwise OR: %d\n", i | o);
            break;
        default:
            printf("Invalid operation\n");
    }

    return 0;
}
