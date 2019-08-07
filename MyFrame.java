import java.awt.*;
import java.awt.event.*;
class MyFrame implements ActionListener
{
	Frame f;
	Button b0,b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12,b13,b14,b15,b16;
	TextField tf;
	int n1,n2,c;
	String s1,s2,s3,s4;
	MyFrame(String s)
	{
		f=new Frame(s);
		b0=new Button("0");
		b1=new Button("1");
		b2=new Button("2");
		b3=new Button("3");
		b4=new Button("4");
		b5=new Button("5");
		b6=new Button("6");
		b7=new Button("7");
		b8=new Button("8");
		b9=new Button("9");
		b10=new Button("+");
		b11=new Button("-");
		b12=new Button("*");
		b13=new Button("/");
		b14=new Button("=");
		b15=new Button("DEL");
		b16=new Button("C");
		tf=new TextField();
		tf.setBounds(30,30,300,20);
		b0.addActionListener(this);
		b1.addActionListener(this);
		b2.addActionListener(this);
		b3.addActionListener(this);
		b4.addActionListener(this);
		b5.addActionListener(this);
		b6.addActionListener(this);
		b7.addActionListener(this);
		b8.addActionListener(this);
		b9.addActionListener(this);
		b10.addActionListener(this);
		b11.addActionListener(this);
		b12.addActionListener(this);
		b13.addActionListener(this);
		b14.addActionListener(this);
		b15.addActionListener(this);
		b16.addActionListener(this);
		b0.setBounds(30,80,30,20);
		b1.setBounds(60,80,30,20);
		b2.setBounds(90,80,30,20);
		b3.setBounds(30,110,30,20);
		b4.setBounds(60,110,30,20);
		b5.setBounds(90,110,30,20);
		b6.setBounds(30,140,30,20);
		b7.setBounds(60,140,30,20);
		b8.setBounds(90,140,30,20);
		b9.setBounds(30,170,30,20);
		b10.setBounds(60,170,30,20);
		b11.setBounds(90,170,30,20);
		b12.setBounds(30,200,30,20);
		b13.setBounds(60,200,30,20);
		b14.setBounds(90,200,30,20);
		b15.setBounds(30,230,30,20);
		b16.setBounds(60,230,30,20);
		f.add(b0);
		f.add(b1);
		f.add(b2);
		f.add(b3);
		f.add(b4);
		f.add(b5);
		f.add(b6);
		f.add(b7);
		f.add(b8);
		f.add(b9);
		f.add(b10);
		f.add(b11);
		f.add(b12);
		f.add(b13);
		f.add(b14);
		f.add(b15);
		f.add(b16);
		f.add(tf);
		f.setSize(400,400);
		f.setLayout(null);
		f.setVisible(true);
	}
	public void actionPerformed(ActionEvent e)
	{
		if(e.getSource()==b0)
		{
			//tf.setText("0");
			s2=tf.getText();
			s3="0";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b1)
		{
			//tf.setText("1");
			s2=tf.getText();
			s3="1";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b2)
		{
			//tf.setText("2");
			s2=tf.getText();
			s3="2";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b3)
		{
			//tf.setText("3");
			s2=tf.getText();
			s3="3";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b4)
		{
			//tf.setText("4");
			s2=tf.getText();
			s3="4";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b5)
		{
			//tf.setText("5");
			s2=tf.getText();
			s3="5";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b6)
		{
			//tf.setText("6");
			s2=tf.getText();
			s3="6";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b7)
		{
			//tf.setText("7");
			s2=tf.getText();
			s3="7";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b8)
		{
			//tf.setText("8");
			s2=tf.getText();
			s3="8";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b9)
		{
			//tf.setText("9");
			s2=tf.getText();
			s3="9";
			s4=s2+s3;
			tf.setText(s4);
		}
		if(e.getSource()==b10)
		{
			s1=tf.getText();
			n1=Integer.parseInt(s1);
			tf.setText("");
			c=1;
		}
		if(e.getSource()==b11)
		{
			s1=tf.getText();
			n1=Integer.parseInt(s1);
			tf.setText("");
			c=2;
		}
		if(e.getSource()==b12)
		{
			s1=tf.getText();
			n1=Integer.parseInt(s1);
			tf.setText("");
			c=3;
		}
		if(e.getSource()==b13)
		{
			s1=tf.getText();
			n1=Integer.parseInt(s1);
			tf.setText("");
			c=4;
		}
		if(e.getSource()==b14)
		{
			if(c==1)
			{
				s1=tf.getText();
				n2=Integer.parseInt(s1); 
				tf.setText(String.valueOf(n1+n2));
			}
			if(c==2)
			{
				s1=tf.getText();
				n2=Integer.parseInt(s1); 
				tf.setText(String.valueOf(n1-n2));
			}
			if(c==3)
			{
				s1=tf.getText();
				n2=Integer.parseInt(s1); 
				tf.setText(String.valueOf(n1*n2));
			}
			if(c==4)
			{
				s1=tf.getText();
				n2=Integer.parseInt(s1); 
				try
				{
					if(n2!=0)
					{
						tf.setText(String.valueOf(n1/n2));
					}
					else
					{
						tf.setText("SYNTAX ERROR");
					}
				}
				catch(Exception i){}
			}
		}
		if(e.getSource()==b15)
		{
			tf.setText("");
		}
		if(e.getSource()==b16)
		{
			int n=Integer.parseInt(s4);
			n=n/10;
			s4=Integer.toString(n);
			tf.setText(s4);
		}
	}
	public static void main(String[] args)
	{
		MyFrame f=new MyFrame("My Frame");
	}
}