import React, { useState, useEffect } from 'react';

const AppointmentBooking = ({ onSubmit }) => {
  const [date, setDate] = useState('');
  const [doctorId, setDoctorId] = useState('');
  const [doctors, setDoctors] = useState([]);
  
  useEffect(() => {
    // Function to fetch doctors from API
    const fetchDoctors = async () => {
      try {
        const response = await fetch('api/doctors'); // Replace 'api/doctors' with your actual API endpoint
        const data = await response.json();
        setDoctors(data); // Assuming API response is an array of doctor objects
      } catch (error) {
        console.error('Error fetching doctors:', error);
      }
    };

    fetchDoctors();
  }, []);

  const handleSubmit = (e) => {
    e.preventDefault();
    onSubmit({ date, doctorId });
  };

  return (
    <div>
      <h2>Book Appointment Form</h2>
      <form onSubmit={handleSubmit}>
        <label>Date:</label>
        <input type="date" value={date} onChange={(e) => setDate(e.target.value)} />
        
        <label>Select Doctor:</label>
        <select value={doctorId} onChange={(e) => setDoctorId(e.target.value)}>
          <option value="">Select Doctor</option>
          {doctors.map(doctor => (
            <option key={doctor.id} value={doctor.id}>{doctor.name}</option>
          ))}
        </select>
        
        <button type="submit">Book Appointment</button>
      </form>
    </div>
  );
};

export default AppointmentBooking;
