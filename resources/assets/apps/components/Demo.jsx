import { useNavigate, useLocation } from 'react-router-dom';
import { Tabs } from '@mantine/core';
import { Overview } from './Overview';
import { Mantine } from './Mantine';
import { Settings } from './Settings';

export const Demo = () => {
  const navigate = useNavigate();
  const location = useLocation();
  const tabValue = location.hash.slice(1);
  const query = new URLSearchParams(location.search);
  const page = query.get('page');
  const defaultTab = window?.ReactApp?.tab || 'overview';

  return (
    <Tabs variant="outline" value={tabValue || defaultTab} onChange={value => navigate(`?page=${page}#${value}`)}>
      <Tabs.List>
        <Tabs.Tab value="overview">Overview</Tabs.Tab>
        <Tabs.Tab value="mantine">Mantine UI</Tabs.Tab>
        <Tabs.Tab value="settings">Settings</Tabs.Tab>
      </Tabs.List>

      <Tabs.Panel value="overview">
        <Overview />
      </Tabs.Panel>

      <Tabs.Panel value="mantine">
        <Mantine />
      </Tabs.Panel>

      <Tabs.Panel value="settings">
        <Settings />
      </Tabs.Panel>
    </Tabs>
  );
};
