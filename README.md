# 🏥 Hospital Management System  

A **Database Management System (DBMS) project** designed to efficiently manage hospital operations, including **patient records, doctor details, prescriptions, pharmacy stocks, and contracts** using a structured relational database.  

## 📌 Project Overview  
This project provides a **comprehensive solution** for hospital management by integrating **frontend and backend technologies**. It ensures **secure data storage, quick access to records**, and **streamlined communication** between doctors, patients, and pharmacies.  

## 🔥 Features  
✅ **Patient Management** – Store patient details, medical history, and assigned doctors.  
✅ **Doctor Database** – Track doctor details, specialties, and years of experience.  
✅ **Pharmacy Management** – Maintain drug inventory, pricing, and supplier details.  
✅ **Prescription Handling** – Doctors can prescribe medicines, linked to patient records.  
✅ **Contract Management** – Store agreements between pharmacies and pharmaceutical companies.  
✅ **User Authentication** – Secure login system for patients, doctors, and administrators.  

## 🛠️ Technology Stack  
- **Frontend:** HTML, CSS  
- **Backend:** PHP, MySQL (via XAMPP)  
- **Database Management:** PHPMyAdmin  

## 📖 Database Structure  
The project consists of multiple tables in MySQL:  

### 🗄️ Main Tables  
- **Patient:** Stores patient details (SSN, Name, Age, Address, Symptoms).  
- **Doctor:** Stores doctor details (SSN, Name, Specialty, Experience).  
- **Pharmacy:** Stores pharmacy details (Name, Address, Phone Number).  
- **Drugs:** Stores drug details (Trade Name, Formula).  
- **Pharmaceutical Company:** Stores company details (Name, Phone Number).  

### 🔗 Relationship Tables  
- **Sells:** Manages pricing for drugs across multiple pharmacies.  
- **Contracts:** Stores contract details (Start Date, End Date, Supervisor).  
- **Prescriptions:** Links doctors, patients, and prescribed drugs.  

## 📌 Installation Guide  
1️⃣ Clone the repository:  
```sh
git clone https://github.com/your-repository/hospital-management-system.git
cd hospital-management-system
```  
2️⃣ Start the backend using **XAMPP**:  
   - Open **XAMPP Control Panel**  
   - Start **Apache** and **MySQL**  
   - Import the database (`hospital_db.sql`) into **PHPMyAdmin**  

3️⃣ Run the project:  
   - Place project files in **htdocs** (XAMPP directory).  
   - Open a web browser and go to:  
     ```
     http://localhost/hospital-management-system/
     ```  

## 📊 System Workflow  
1️⃣ **User Login:** Patients, Doctors, and Admins log in using their credentials.  
2️⃣ **Patient Registration:** New patients can create accounts and book appointments.  
3️⃣ **Doctor Assignment:** Each patient is assigned a primary physician.  
4️⃣ **Prescription Generation:** Doctors prescribe medications to patients.  
5️⃣ **Pharmacy Management:** Stores update medicine availability and pricing.  

## 📈 Future Enhancements  
🔹 **Automated Billing System** – Generate invoices for patient treatments.  
🔹 **SMS/Email Notifications** – Appointment reminders and prescription alerts.  
🔹 **AI-powered Diagnosis Assistance** – Predictive analytics for patient conditions.  

## 📜 License  
This project is open-source under the **MIT License**.  
