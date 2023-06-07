#include<iostream>
#include<windows.h>
using namespace std;
class person
{
	char Name[31];
	char DOB[11];
	char City [21];
	char Mobile_no[11];
	public:
		virtual void rishu()=0;
		virtual void input()
		{
			cout<<"Enter your name      :";cin>>Name;
			cout<<"Enter your DOB       :";cin>>DOB;
			cout<<"Enter your City      :";cin>>City;
			cout<<"Enter your Mobile_no :";cin>>Mobile_no;
		}
		virtual void display()
		{
			cout<<"NAME                 :"<<Name<<endl;
			cout<<"DOB                  :"<<DOB<<endl;
			cout<<"City                 :"<<City<<endl;
			cout<<"MobileNo             :"<<Mobile_no<<endl;
		}
};
class custumer:public person
{
	char Billing_Address[31];
	char Product_name[30];
	float amount;
	float p_amount;
	float rest_amount;
	
	public:
		void input()
		{	
		SetConsoleTextAttribute(GetStdHandle(STD_OUTPUT_HANDLE),4);
			cout<<"************************** Custumer Details ************************"<<endl;
			person::input();
			cout<<"Enter billing address:";cin>>Billing_Address;
			cout<<"Enter product name   :";cin>>Product_name;
			cout<<"Total amount         :";cin>>amount;
			cout<<"Total Paid amount    :";cin>>p_amount;
			cout<<"********************************************************************"<<endl;
			
		}
		void display()
		{
			 SetConsoleTextAttribute(GetStdHandle(STD_OUTPUT_HANDLE),4);
			cout<<"********************************************************************"<<endl;
			person::display();
			cout<<"Billing addresss     :"<<Billing_Address<<endl;
			cout<<"Product name         :"<<Product_name<<endl;
			cout<<"Amount               :"<<amount<<endl;
			cout<<"Paid amount          :"<<p_amount<<endl;
			cout<<"Rest amount          :"<<amount-p_amount<<endl;
			cout<<"********************************************************************"<<endl;
			
		}
};
class dealer:public person
{
	char Shop_Address[31];
	int sizeOfProduct;
	float amount;
	
	public:
		void input()
		{
			SetConsoleTextAttribute(GetStdHandle(STD_OUTPUT_HANDLE),1);
			cout<<"************************** Dealer Details **************************"<<endl;
			person::input();
			cout<<"Enter Shop address   :";cin>>Shop_Address;
			cout<<"Enter product size   :";cin>>sizeOfProduct;
			cout<<"Total product amount :";cin>>amount;
			cout<<"********************************************************************"<<endl;
			
			
		}
		void display()
		{
			SetConsoleTextAttribute(GetStdHandle(STD_OUTPUT_HANDLE),1);
			cout<<"********************************************************************"<<endl;
			person::display();
			cout<<"Shop addresss       :"<<Shop_Address<<endl;
			cout<<"Number ofProduct    :"<<sizeOfProduct<<endl;
			cout<<"Amount              :"<<amount*sizeOfProduct<<endl;
			cout<<"********************************************************************"<<endl;
			
		}
};
int main()
{
	int no;
	char choice;
	person *ptr;
	do
	{
		SetConsoleTextAttribute(GetStdHandle(STD_OUTPUT_HANDLE),2);
		cout<<"********************************************************************"<<endl;
		cout<<"1: Custumer Details"<<endl<<"2: Dealer Details"<<endl<<"3: Exit Program"<<endl;
		cout<<"********************************************************************"<<endl;
		cout<<"Select correct option:";cin>>no;
		switch(no)
		{
			case 1:
				ptr=new custumer;
				ptr->input();
				ptr->display();
				break;
			case 2:
				ptr=new dealer;
				ptr->input();
				ptr->display();
				break;
			case 3:
				exit(1);
		}
		cout<<"Continue again press (y|Y) : ";cin>>choice;
	}while(choice=='Y'||choice=='y');	
}
