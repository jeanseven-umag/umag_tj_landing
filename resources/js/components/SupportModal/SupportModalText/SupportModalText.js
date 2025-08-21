import { Flex, Text } from "@mantine/core";

export const SupportModalText = ({ active }) => {
  const getSupportText = (active) => {
    switch (active) {
      case 3:
        return "Ба шарофати шумо дастурҳо беҳтар ва фаҳмотар мешаванд. Барои анҷом додани пешниҳоди дархост, лутфан номи худ ва рақами телефони худро, ки мо метавонем бо шумо тамос гирем, нишон диҳед.";
            case 4:
        return "Ташаккур барои фикру мулоҳизаи шумо! Мо ҷавоби шуморо таҳлил мекунем ва кӯшиш мекунем, ки тағйироти заруриро ба дастурҳо ворид намоем, то онҳо фаҳмотар ва самараноктар бошанд.";
            default:
        return "Мо мутаассифем, ки ин дастур ба шумо мувофиқ нест, чӣ гуна метавонем ба шумо кӯмак кунем? Лутфан сабабро нишон диҳед, то мо тавонем дастурро беҳтар кунем.";
    }
  };
  const field = getSupportText(active);

  return (
    <Flex justify="flex-start">
      <Text className="support-modal-text" color="#828282">
        {field}
      </Text>
    </Flex>
  );
};
