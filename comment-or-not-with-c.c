/* Md. Imran Hosen
   www.fb/Md.ImranHosen.up
   www.github.com/MdImranHosen
*/
#include<stdio.h>
#include<conio.h>
void main(){
    char text[1000];
    int i = 2, a = 0;
    system("cls");
    printf("\nWrite a C Program to Identify Whether a Given Line is a Comment or Not.");
    printf("\n\nEnter Text : ");
    gets(text);
    if(text[0] == '/'){
        if(text[1] == '/') {
            printf("\nIt is a Comment.");
        }else if(text[1] == '*'){
            for(i = 2; i <= 1000; i++){
                if(text[i] == '*' && text[i + 1] == '/'){
                    printf("\nIt is a Comment.");
                    a = 1;
                    break;
                }else {
                    continue;
                }
            }
            if(a == 0){
                printf("\nIt is Not a Comment.");
            }
        }
    }
    else{
        printf("\nIt is Not a Comment.");
    }
    getch();
}
