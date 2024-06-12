import React from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
  return (
    <nav>
      <ul>
        <li><Link to="/">Home</Link></li>
        <li><Link to="/register">Register</Link></li>
        <li><Link to="/login">Login</Link></li>
        <li><Link to="/admin">Admin Dashboard</Link></li>
        <li><Link to="/doctor">Doctor Dashboard</Link></li>
        <li><Link to="/patient">Patient Dashboard</Link></li>
      </ul>
    </nav>
  );
};

export default Navbar;
