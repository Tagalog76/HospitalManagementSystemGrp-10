import React from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
  return (
    <nav>
      <ul>
        <li><Link to="/pages/Home.js">Home</Link></li>
        <li><Link to="/components/Register.js">Register</Link></li>
        <li><Link to="/components/Login.js">Login</Link></li>
        <li><Link to="/components/AdminDashboard.js">Admin Dashboard</Link></li>
        <li><Link to="/components/DoctorDashboard.js">Doctor Dashboard</Link></li>
        <li><Link to="/components/PatientDashboard.js">Patient Dashboard</Link></li>
      </ul>
    </nav>
  );
};

export default Navbar;
