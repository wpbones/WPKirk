const { render } = wp.element;

// core styles are required for all packages
import '@mantine/core/styles.css';
import classes from './app.module.scss';

import { Route, Routes, BrowserRouter } from 'react-router-dom';
import { MantineProvider } from '@mantine/core';
import { Demo } from './components/Demo';

const MyApp = () => {
  return (
    <MantineProvider>
      <h2 className={classes.title}>Say Hello, Mantine Application</h2>

      <BrowserRouter basename="/wp-admin/">
        <Routes>
          <Route path="/admin.php" element={<Demo />} />
        </Routes>
      </BrowserRouter>
    </MantineProvider>
  );
};

render(<MyApp />, document.getElementById('react-app'));
