/////////// 1. No Problem Solveing. ( Even & Odd ) \\\\\\\\\\\\\\\\\\\\\\\
#include<stdio.h>
void main(){
int t;
printf("Enter one Integer Number: ");
scanf("%d",&t);
if(1<=t<=100){
   if(t%2 == 0){
    printf("Even Number: %d",t);
   } else{
    printf("Odd Number: %d",t);
   }
 }
}
