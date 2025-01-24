import React from 'react';
import ReactDOM from 'react-dom';
import Slider from '@mui/material/Slider';

// Map component names to Material UI components
const COMPONENTS = {
  Slider: Slider,
};

document.querySelectorAll('[data-react-component]').forEach((el) => {
  const ComponentName = el.dataset.reactComponent;
  const Component = COMPONENTS[ComponentName];

  if (Component) {
    const props = JSON.parse(el.dataset.props || '{}');
    ReactDOM.render(<Component {...props} />, el);
  }
});
