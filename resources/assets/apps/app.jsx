const { render } = wp.element;

// core styles are required for all packages
import '@mantine/core/styles.css';
import classes from './app.module.scss';

import { MantineProvider } from '@mantine/core';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import { Demo } from './components/Demo';

const MyApp = () => {
  const pathname = window.location.pathname;
  const baseName = pathname.substring(0, pathname.indexOf('/admin.php'));

  return (
    <MantineProvider>
      <h2 className={classes.title}>Say Hello, Mantine Application</h2>

      <BrowserRouter basename={baseName}>
        <Routes>
          <Route path="/admin.php" element={<Demo />} />
        </Routes>
      </BrowserRouter>
    </MantineProvider>
  );
};

render(<MyApp />, document.getElementById('react-app'));
