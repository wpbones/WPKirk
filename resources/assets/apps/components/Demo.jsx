import { Tabs } from '@mantine/core';
import { __ } from '@wordpress/i18n';
import { useLocation, useNavigate } from 'react-router-dom';
import { Mantine } from './Mantine';
import { Overview } from './Overview';
import { Settings } from './Settings';

export const Demo = () => {
  const navigate = useNavigate();
  const location = useLocation();
  const tabValue = location.hash.slice(1);
  const query = new URLSearchParams(location.search);
  const page = query.get('page');
  const defaultTab = window?.ReactApp?.tab || 'overview';

  return (
    <Tabs
      variant="outline"
      value={tabValue || defaultTab}
      onChange={value => navigate(`?page=${page}#${value}`)}>
      <Tabs.List>
        <Tabs.Tab value="overview">{__('Overview', 'wp-kirk')}</Tabs.Tab>
        <Tabs.Tab value="mantine">{__('Mantine UI', 'wp-kirk')}</Tabs.Tab>
        <Tabs.Tab value="settings">{__('Settings', 'wp-kirk')}</Tabs.Tab>
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
