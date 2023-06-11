#include<iostream>
using namespace std;

class Person
{
	protected:
		char name[21];
		char city[21];
		char mob[11];
		char gmail[31];
		char DOB[12];
	
		void input()
		{
			cout<<"Enter name       :";
			cin>>name;
			cout<<"Enter city no    :";	
			cin>>city;
			cout<<"Enter mobile no  :";	
			cin>>mob;
			cout<<"Enter Gmail      :";
			cin>>gmail;
			cout<<"Enter DOB        :";	
			cin>>DOB;
		}
		void display()
		{
			cout<<"Name       :"<<name<<endl;
			cout<<"City       :"<<city<<endl;
			cout<<"Mobile no  :"<<mob<<endl;
			cout<<"Gmail      :"<<gmail<<endl;
			cout<<"DOB        :"<<DOB<<endl;
		}
};


class Customer:private Person
{
	char billing_address[51];
	float amount_outstanding;
	public:
		void input()
		{
			input();
			cout<<"Enter billing address      :";
			cin>>billing_address;
			cout<<"Enter amount understanding :";
			cin>>amount_outstanding;			 
		}
		void display()
		{
			display();
			cout<<"Billing address    :"<<billing_address<<endl;
			cout<<"Amount outstanding :"<<amount_outstanding<<endl;
		}
}; 


class Dealer:private Person
{
	char shop_addressing[31];
	int unit_sold;

	public:
		void input()
		{
			input();
			cout<<"Enter shop address  :";
			cin>>shop_addressing;
			cout<<"Enter no unit sold  :";
			cin>>unit_sold;	
		}
		void display()
		{
			display();
			cout<<"Shop address        :"<<shop_addressing<<endl;
			cout<<"Unit                :"<<unit_sold<<endl;
		}
		
};
int main()
{
	Customer Rishu;
	Rishu.input();
	Rishu.display();
	Dealer Harsh;
	Harsh.input();
	Harsh.display();
}