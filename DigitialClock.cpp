#include<iostream>
#include<windows.h>
#include<iomanip>
using namespace std;
int main()
{
    int h,m,s;
    int wrong,check;
    wrong=check=0;
    while(wrong==0)
    {
        cout<<"Enter hours :";cin>>h;
        cout<<"Enter minutes :";cin>>m;
        cout<<"Enter seconds :";cin>>s;
        if(h<24&&m<60&&s<60)
            wrong++;
        else
             system("cls");
   }
   while(check==0)
   {
        system("cls");
        cout<<setw(60)<<"--------- : Digital clock :---------"<<endl;
        cout<<setw(50)<<"----------------"<<endl;
        cout<<setw(40)<<h<<":"<<m<<":"<<s<<endl;
        cout<<setw(50)<<"----------------"<<endl;
         Sleep(1000);
         system("color 2");
        s++;
        if(s>59)
        {
            s=0;
            m++;
        }
        if(m>59)
        {
            m=0;
            h++;
        }
        if(h>24)
        {
            h=0;
        }
   }

   return 0;
}