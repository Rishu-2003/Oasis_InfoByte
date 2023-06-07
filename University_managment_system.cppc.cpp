#include<iostream>
#include<iomanip>
using namespace std;
class Person
{
	char first_name[15],last_name[15];
	int age;
	public:
		virtual void input()
		{
			cout<<"Enter first name :";cin>>first_name;
			cout<<"Enter last name  :";cin>>last_name;
			cout<<"Enter age        :";cin>>age;
		}
		virtual void display()
		{
			cout<<"First name :"<<first_name<<endl;
			cout<<"Last name  :"<<last_name<<endl;
			cout<<"age :"<<age<<endl;
		}
};
class Student:public Person
{
	char course[10];
	char session[11];
	int student_id;
	public:
		void input()
		{
			cout<<"------------------------------------------------------------"<<endl;
			Person::input();
			cout<<"Enter course :";cin>>course;
			cout<<"Enter session :";cin>>session;
			cout<<"Enter Student Id:";cin>>student_id;
		}
		void display()
		{
			cout<<"------------------------------------------------------------"<<endl;
			Person::display();
			cout<<"Course name :"<<course<<endl;
			cout<<"Session  :"<<session<<endl;
			cout<<"Student Id:"<<student_id<<endl;
		}
	
};
class Employee:public Person
{
	float salary;
	char department_name[10];
	char designation[15];
	int Employee_id;
	public:
		void input()
		{
			cout<<"------------------------------------------------------------"<<endl;
			Person::input();
			cout<<"Enter salary :";cin>>salary;
			cout<<"Enter department name :";cin>>department_name;
			cout<<"Enter designation :";cin>>designation;
			cout<<"Enter Employee Id",cin>>Employee_id;
		}
		void display()
		{
			cout<<"------------------------------------------------------------"<<endl;
			Person::display();
			cout<<"Salary    :"<<salary<<endl;
			cout<<"Department name :"<<department_name<<endl;
			cout<<"Designation :"<<designation<<endl;
			cout<<"Employee Id :"<<Employee_id<<endl;
		}
	
};
int main()
{
	int ch;
	char choice;
	cout<<"------------------------------------------------------------"<<endl;
	cout<<setw(40)<<"UNIVERSITY MANAGEMENT SYSTEM"<<endl;
	do
	{
		cout<<"------------------------------------------------------------"<<endl;
		cout<<"1. Students"<<endl<<"2. Employees"<<endl<<"3. Exit"<<endl;
		cout<<"------------------------------------------------------------"<<endl;
		cout<<"Enter case :";cin>>ch;
		cout<<"------------------------------------------------------------"<<endl;
		Person *ptr;
		switch(ch)
		{
			case 1:
				cout<<setw(40)<<"Students Details"<<endl;
				ptr=new Student;
				ptr->input();
				ptr->display();
				break;
			case 2:
				cout<<setw(40)<<"Employees Details"<<endl;
				ptr=new Employee;
				ptr->input();
				ptr->display();
				break;
			case 3:
				exit(1);
				break;
		}
		cout<<"Do you want to continue this process press (y|Y) :";cin>>choice;
	}while(choice=='y'||choice=='Y');
}


