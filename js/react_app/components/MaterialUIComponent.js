import React from 'react';
import Button from '@mui/material/Button';

const MaterialUIComponent = ({ label, onClick }) => {
  return <Button variant="contained" onClick={onClick}>{label}</Button>;
};

export default MaterialUIComponent;
