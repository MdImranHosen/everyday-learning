//1.Program to Add Two Integers

#include<stdio.h>
int main()
{
 int num1,num2,total;
 printf("Enter Two Integers: ");

 scanf("%d %d",&num1, &num2);
 total = num1+num2;
 printf("%d + %d = %d", num1, num2, total);

 return 0;
}

//2. Program to Multiply Two Numbers

#include<stdio.h>
int main()
{
    double num1, num2, total;

    printf("Enter Two number: ");

    scanf("%lf %lf",&num1, &num2);

    total = num1*num2;
    printf("%lf * %lf = %.2lf",num1, num2, total);
    return 0;
}

//3. Program to Compute Quotient and Remainder

#include<stdio.h>
int main()
{
    int dividend,divisor,quotient,remainder;

    printf("Enter a Integer for Dividend: ");
    scanf("%d",&dividend);

    printf("Enter a Divisor: ");
    scanf("%d",&divisor);

    quotient = dividend / divisor;
    remainder = dividend % divisor;

    printf("Quotient %d \n", quotient);
    printf("Remainder %d", remainder);

    return 0;
}

//4. Program to Check Even or Odd

#include<stdio.h>
int main()
{
    int number;

    printf("Enter a Number :");

    scanf("%d",&number);
    if(number %2==0){
        printf("%d is even \n", number);
    }else{
     printf("%d is odd", number);
    }
    return 0;
}

//5. Program to Check Vowel or consonant
#include<stdio.h>
int main()
{
    char c;
    int isLowerCaseVowel,isUpperCaseVowel;
    printf("Enter a Alphabet: ");
    scanf("%c",&c);

    isLowerCaseVowel=(c=='a'||c=='e'||c=='i'||c=='o'||c=='u');
    isUpperCaseVowel=(c=='A'||c=='E'||c=='I'||c=='O'||c=='U');

    if(isLowerCaseVowel||isUpperCaseVowel){
        printf("%c is Vowel",c);
    }else{
     printf("%c is Consonant",c);
    }
    return 0;
}

//6. Largest Number Among Three  Numbers:
#include<stdio.h>
int main()
{
    double n1,n2,n3;
    printf("Enter Three Numbers:: ");

    scanf("%lf %lf %lf",&n1,&n2,&n3);

    if(n1>=n2 && n1>=n3){
        printf("%lf is Largest number",n1);
    }else if(n2>=n1 && n2>=n3){
     printf("%lf is Largest Number",n2);
    }else if(n3>=n1 && n3>=n2){
      printf("%lf is Largest Number",n3);
    }
    return 0;
}

//7. Multiplication Table Up to 10
#include<stdio.h>
int main()
{
    int i,d;
    printf("Enter a Number: ");
    scanf("%d",&d);
    for(i=1;i<=10;i++){

        printf("%d * %d = %d \n",d,i,d*i);
    }
    return 0;
}

